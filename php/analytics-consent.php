<?php
/**
 * SEC digital calendar analytics consent
 *
 * Include this file once, immediately before </body> on every page.
 * Remove the existing Google Analytics and Microsoft Clarity snippets first.
 */
?>

<style>
    .analytics-consent {
        position: fixed;
        right: 1rem;
        bottom: 1rem;
        left: 1rem;
        z-index: 1100;
        max-width: 44rem;
        margin: 0 auto;
        padding: 1rem;
        color: #212529;
        text-align: left;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .25);
    }

    .analytics-consent p {
        margin: 0 0 .75rem;
    }

    .analytics-consent__actions {
        display: flex;
        flex-wrap: wrap;
        gap: .5rem;
    }

    .analytics-consent__button {
        display: inline-block;
        padding: .5rem .75rem;
        color: #fff;
        font: inherit;
        line-height: 1.5;
        background: #343a40;
        border: 1px solid #343a40;
        border-radius: .25rem;
        cursor: pointer;
    }

    .analytics-consent__button:hover,
    .analytics-consent__button:focus {
        color: #fff;
        background: #23272b;
        border-color: #1d2124;
    }

    .analytics-consent__settings {
        position: fixed;
        bottom: .75rem;
        left: .75rem;
        z-index: 1090;
        padding: .35rem .6rem;
        color: #212529;
        font: inherit;
        font-size: .875rem;
        background: #fff;
        border: 1px solid #6c757d;
        border-radius: .25rem;
        cursor: pointer;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .15);
    }

    [hidden] {
        display: none !important;
    }
</style>

<section
    class="analytics-consent"
    id="analytics-consent"
    aria-labelledby="analytics-consent-heading"
    hidden
>
    <h2 id="analytics-consent-heading" class="h5">Analytics cookies</h2>
    <p>
        We use Google Analytics and Microsoft Clarity to understand how this
        website is used. We will load them only if you accept analytics cookies.
        <a href="/terms/#cookies">Read our cookie information</a>.
    </p>
    <div class="analytics-consent__actions">
        <button class="analytics-consent__button" id="analytics-accept" type="button">
            Accept analytics
        </button>
        <button class="analytics-consent__button" id="analytics-reject" type="button">
            Reject analytics
        </button>
    </div>
</section>

<button
    class="analytics-consent__settings"
    id="analytics-settings"
    type="button"
    hidden
>
    Cookie settings
</button>

<script>
(function () {
    'use strict';

    var consentCookieName = 'sec_analytics_consent';
    var googleAnalyticsId = 'G-G7J83CS4S6';
    var clarityProjectId = 'vvb9s3vizj';
    var banner = document.getElementById('analytics-consent');
    var acceptButton = document.getElementById('analytics-accept');
    var rejectButton = document.getElementById('analytics-reject');
    var settingsButton = document.getElementById('analytics-settings');
    var analyticsLoaded = false;

    function getConsent() {
        var cookies = document.cookie ? document.cookie.split('; ') : [];
        var prefix = consentCookieName + '=';
        var i;

        for (i = 0; i < cookies.length; i += 1) {
            if (cookies[i].indexOf(prefix) === 0) {
                return decodeURIComponent(cookies[i].substring(prefix.length));
            }
        }

        return null;
    }

    function saveConsent(value) {
        document.cookie = consentCookieName + '=' + encodeURIComponent(value)
            + '; Max-Age=15552000; Path=/; SameSite=Lax; Secure';
    }

    function showBanner() {
        banner.hidden = false;
        settingsButton.hidden = true;
        window.setTimeout(function () {
            acceptButton.focus();
        }, 0);
    }

    function hideBanner() {
        banner.hidden = true;
        settingsButton.hidden = false;
    }

    function loadGoogleAnalytics() {
        window.dataLayer = window.dataLayer || [];
        window.gtag = function () {
            window.dataLayer.push(arguments);
        };

        window.gtag('js', new Date());
        window.gtag('config', googleAnalyticsId);

        var googleScript = document.createElement('script');
        googleScript.async = true;
        googleScript.src = 'https://www.googletagmanager.com/gtag/js?id='
            + encodeURIComponent(googleAnalyticsId);
        document.head.appendChild(googleScript);
    }

    function loadMicrosoftClarity() {
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () {
                (c[a].q = c[a].q || []).push(arguments);
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = 'https://www.clarity.ms/tag/' + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        }(window, document, 'clarity', 'script', clarityProjectId));

        window.clarity('consentv2', {
            ad_Storage: 'denied',
            analytics_Storage: 'granted'
        });
    }

    function loadAnalytics() {
        if (analyticsLoaded) {
            return;
        }

        analyticsLoaded = true;
        loadGoogleAnalytics();
        loadMicrosoftClarity();
    }

    function deleteFirstPartyAnalyticsCookies() {
        var cookieNames = document.cookie.split(';').map(function (cookie) {
            return cookie.split('=')[0].trim();
        });
        var host = window.location.hostname;
        var domains = ['', host, '.' + host, '.seccalendar.org.uk'];

        cookieNames.forEach(function (name) {
            if (name.indexOf('_ga') !== 0 && name.indexOf('_cl') !== 0) {
                return;
            }

            domains.forEach(function (domain) {
                var domainAttribute = domain ? '; Domain=' + domain : '';
                document.cookie = name
                    + '=; Max-Age=0; Path=/'
                    + domainAttribute
                    + '; SameSite=Lax; Secure';
            });
        });
    }

    function acceptAnalytics() {
        saveConsent('accepted');
        hideBanner();
        loadAnalytics();
    }

    function rejectAnalytics() {
        saveConsent('rejected');

        window['ga-disable-' + googleAnalyticsId] = true;

        if (typeof window.clarity === 'function') {
            window.clarity('consentv2', {
                ad_Storage: 'denied',
                analytics_Storage: 'denied'
            });
        }

        deleteFirstPartyAnalyticsCookies();
        hideBanner();

        if (analyticsLoaded) {
            window.location.reload();
        }
    }

    acceptButton.addEventListener('click', acceptAnalytics);
    rejectButton.addEventListener('click', rejectAnalytics);
    settingsButton.addEventListener('click', showBanner);

    if (getConsent() === 'accepted') {
        hideBanner();
        loadAnalytics();
    } else if (getConsent() === 'rejected') {
        hideBanner();
    } else {
        showBanner();
    }
}());
</script>
