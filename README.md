# SEC digital calendar and lectionary

* Version: 3.6.0
* Last updated: Monday 28 November 2022


<!-- MarkdownTOC -->

- [1. About](#1-about)
    - [Readings](#readings)
    - [Translations](#translations)
    - [Accuracy](#accuracy)
    - [Sources](#sources)
- [2. Style guide](#2-style-guide)
    - [Sundays](#sundays)
    - [Weekdays](#weekdays)
    - [Feast days](#feast-days)
    - [Reading style](#reading-style)
        - [Notes](#notes)
- [3. File formats](#3-file-formats)
    - [Unix \(LF\)](#unix-lf)
    - [Date formats](#date-formats)
        - [Import CSV](#import-csv)
        - [CSV lookup for PHP app](#csv-lookup-for-php-app)
    - [CSV files](#csv-files)
        - [Import CSV](#import-csv-1)
        - [CSV lookup for PHP app](#csv-lookup-for-php-app-1)
- [4. Website updates](#4-website-updates)
    - [Create supporting files for website](#create-supporting-files-for-website)
- [Update website](#update-website)

<!-- /MarkdownTOC -->



---

## 1. About

This repository contains the source files for the SEC digital calendar project hosted at <https://www.seccalendar.org.uk/>.

These files allow you to import or subscribe to the [Scottish Episcopal Church](https://www.scotland.anglican.org/) calendar (saints’ days, festivals and readings) using Microsoft Office Outlook Calendar, Google Calendar, or any other compatible calendar application.

The files were originally produced for my own personal use, so they may not have all the details that you want in them.

Feel free to adapt these files for your own use, subject to your agreement of the [license](https://github.com/garethjmsaunders/sec-digital-calendar/blob/master/LICENSE).

The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED",  "MAY", and "OPTIONAL" in this document are to be interpreted as described in [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).


### Readings

The readings for category 4 saints days and lesser festivals are simply those for that day of the week in relation to the previous Sunday rather than specifically for that minor saint/festival. For example, the readings given for Ambrose of Milan (Friday 7 December) are those for the Friday of Advent 1.

In other words, I've used only readings from The Lectionary and the Readings for Festivals, and not those from elsewhere or from the Readings for Special Occasions or Common Readings for Saints Days.


### Translations

Where possible I have always translated the festival of a saint, if it coincides with a higher-category feast, to the next available date. It is possible that a suitable, nearby date has not been found and so that feast day has been omitted for this year.


### Accuracy

While every effort has been made to ensure that the data contained in these files is correct and up-to-date, occasionally mistakes do get made and errors slip into the final production files.

The Revd Gareth J M Saunders will not be held accountable for any issues that arise from the use of these files. You use them entirely at your own risk.

To report any errors please email Gareth J M Saunders.


### Sources

[Calendar and Lectionary source materials](http://www.scotland.anglican.org/who-we-are/publications/liturgies/calendar-and-lectionary/) may be downloaded for free from the Scottish Episcopal Church website.

The Guide to the Calendar and Lectionary is an annual publication that offers guidance on how to use the lectionary each church year, especially in relation to translated (moved) festivals.

Material from the Revised Common Lectionary copyright © 1992 by the Consultation on Common Texts.



---


## 2. Style guide

The following style guide is use when compiling the documents. It has been designed to be a simple and straight-forward as possible providing all the information in a readable format.

Note that Outlook 2007+ for some obscure reason changes uppercase words to a blue-formatted heading.


### Sundays

The order of information at the start of Sundays is as follows:

1. Sunday [category] Colour, e.g. `Pentecost 4 [3] Green`.
2. Scottish Prayer Book (SPB) Sunday, e.g. `SPB Trinity 3`.
3. Ordination of a bishop, e.g. `Ordination of the Rt Revd Ian Paton as Bishop of St Andrews, Dunkeld and Dunblane, 2018`
4. Week of season, e.g. `Week of Proper 13`.
5. Revised Common Lectionary readings year (A, B or C), then Daily Eucharist and Daily Prayer readings year (1 or 2), .e.g. `Year A/2`.

Example

```
Pentecost 7 [3] Green
SPB Trinity 6
Week of Proper 16
Year A/2

EUCHARIST

Continuous:
Genesis 28:10–19a
Psalm 139:1–12, 23–24
Romans 8:12–25
Matthew 13:24–30, 36–43

Thematic:
Isaiah 44:6–8 or Wisdom of Solomon 12:13, 16–19
Psalm 86:11–17
Romans 8:12–25
Matthew 13:24–30, 36–43

DAILY PRAYER: Week D 
Job 13:13–14 or Sirach 18:1–14
Hebrews 2:5–18
Luke 10:38–42

ALTERNATIVE PSALMS
Morning: Psalm 67
Evening: Psalm 73
```


### Weekdays

The order of information at the start of weekdays is as follows:

1. Saint's day, e.g. `John XXIII, Bishop of Rome, Reformer, 1963 [6] White`.
2. Day after Sunday (Colour), e.g. `Monday after Pentecost 2 (Green)`.
3. Specific date, these are used mostly between Advent and Epiphany, e.g. `18 December`.
4. Ember or Rogation day, e.g. `Rogation Day` or `Ember Day`.
5. Ordination of a bishop (in parentheses), e.g. `(Ordination of the Rt Revd Kevin Pearson as Bishop of Argyll and the Isles, 2011)`
6. Week of season, e.g. `Week of Proper 9 (if after Pentecost)`.
7. Year in the order: Revised Common Lectionary readings (A, B or C), then Daily Eucharist and Daily Prayer readings (1 or 2), .e.g. `Year A/2`.

Example

```
Adrian of May Island, Abbot, and Companions, Martyrs, 875 [6] Red
Wednesday after First Sunday of Lent (Violet or Lenten Array)
Ember Day
(Ordination of the Rt Revd Kevin Pearson as Bishop of Argyll and the Isles, 2011)
Week of Lent 1
Year A/2

DAILY EUCHARIST
Jonah 3:1–10
Psalm 51:1–2, 11–13
Luke 11:29–32

DAILY PRAYER: Returning to God 
Genesis 37:25–36
1 Corinthians 2:1–13
Mark 1:29–45

EMBER DAY READINGS
Isaiah 44:1–8
Psalm 87
1 Peter 2:4–10
John 17:6–19
```


### Feast days

For mid-week feast days of category 4 or above, the corresponding non-feast day readings should also be offered, e.g.

```
Mary the Virgin [4] White
Year A/2

EUCHARIST
Isaiah 7:10–15 or Revelation 11:19 – 12:6, 10
Psalm 132:6–10, 13–14 or Psalm 45:10–17
Galatians 4:4–7
Luke 1:46–55 or Luke 2:1–7

MORNING PRAYER: Festivals
1 Samuel 2:1–10
John 2:1–12

EVENING PRAYER: Festivals
Jeremiah 31:1–14 or Zechariah 2:10–13
John 19:23–27 or Acts 1:6–14

or

Common readings for saints' days
MARY, MOTHER OF THE LORD

Genesis 3:9–15, 20
Psalm 45:10–17
Acts 1:12–14
Luke 1:26–38

or

Isaiah 7:10–14
Psalm 113
Romans 8:18–30
Luke 1:39–47

or

Micah 5:1–4
Psalm 131
Galatians 4:4–7
John 19:25–27

---

Saturday after Pentecost 10 (Green)
Week of Proper 19
Year A/2

DAILY EUCHARIST
Ezekiel 18:1–13, 30–32
Psalm 51:11–18
Matthew 19:13–15

DAILY PRAYER: Week C
Judges 16:1–14
Acts 7:30–43
John 5:1–18
```



---

### Reading style

In this style guide I have changed a few of the conventions used in the SEC Calendar and Lectionary to reference Bible passages. This is to improve clarity.

Reading ranges MUST be laid out in the following formats:

```
Reading 1:1–10
Reading 1:1–10, 15–20
Reading 1:1, 15–20
Reading 1:1–10, (15–20)
Reading 1:(1), 15–20
Reading 1:(1–10), 15–20
Reading 1:1 – 2:10
Reading 1:1–5; 2:1–10
Reading 1:1–5 or Reading 2:1–10, 15–20
```

#### Notes

* There must be no space before or after a colon (`:`). Colons are used to distinguish chapter (left of the colon) from verses (right of the colon).
* There must always be a space after a comma (`,`) or semicolon (`;`).
* There must be no space within a range (e.g. `1:1-10`) unless the range spans more than one chapter (e.g. `1:1 - 2:10`) in which case there must be a space either side of the dash to aid readability.
* Dashes must be an en dash `–`  not a simple dash (`-`) or em dash `–`.



---


## 3. File formats

### Unix (LF)

When compiling the CSV files using either a spreadsheet or directly into Google Calendar, ensure that any text copied into the cells is saved with Unix (LF) line-endings, otherwise Apple iCal can mistake the text as HTML and output gobbledygook, e.g. `<html-blob><u></u>Monday 28 November 2022<u></u><br><u></u>Monday after First Sunday of Advent, etc.`


### Date formats

#### Import CSV

`sec-master-calendar-2022-2023.csv`

For the CSV file that you use to import into Google Calendar, Microsoft Outlook, etc., use the following date format:

```
yyyy-mm-dd
```

#### CSV lookup for PHP app

`csv-lookup.csv`

For the CSV file that is used by the web app to display today's feast plus the following 14 (this may be adjusted in the `csv-lookup.php` file), use the following date format:

```
dd/mm/yyyy
```


### CSV files

#### Import CSV

`sec-master-calendar-2022-2023.csv`

The CSV file that you use to import into Google Calendar, Microsoft Outlook, etc. should have the following columns. Data is shown in `code text`.

1. Subject - `[Feast day name]`
2. Start Date - `yyyy-mm-dd`
3. Start Time - `[blank]`
4. End Date - `[blank]`
5. End Time - `[blank]`
6. All day event - `TRUE`
7. Reminder on/off - `FALSE`
8. Description - `[Details, readings, collects, etc.]`
9. Priority - `Normal`
10. Sensitivity - `Normal`
11. Show time as - `3`

#### CSV lookup for PHP app

`csv-lookup.csv`

The CSV file that is used by the web app to display today's feast, should have the following columns:

1. date - `dd/mm/yyyy`
2. theme - `white | green | red | violet`
3. season - `Advent | Christmas | Epiphany | Lent | Holy Week | Easter | Pentecost`
4. feast - `[Feast day name]`
5. description - `Feria | [Saint details and dates]`
6. class - `([1-6])`
7. liturgical-colour - `White | Green | Red | Red or White | Violet | Violet or Lenten Array`
8. translated - `Translated from [DATE]`
9. spb - e.g. `SPB Quinquagesima - Violet`
10. emberogation - `Ember day | Rogation day`
11. bishop - `[Ordination of bishop of X]`
12. year-from - `2022`
13. year-to - `2023`
14. rcl - `A | B | C`
15. daily - `1 | 2`
16. readings-collect - `[Details, readings, collects, etc.]`



---


## 4. Website updates

Update the following files and locations each year.

### Create supporting files for website

* `sec-master-calendar-2022-2023.csv` - Update years accordingly
* `csv-lookup.csv`
* Save Google Calendar single year iCalendar file URL.

## Update website

1. Upload updated `csv-lookup.csv` to `/php/`.
2. Upload `sec-master-calendar-2022-2023.csv` to `/download/`. 
3. Update `/subscribe/index.php` with links to new iCalendar feed (single year), downloadable CSV file and downloadable ``.ics` (single year) file.