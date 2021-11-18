# SEC digital calendar and lectionary

* Version: 3.5.0
* Last updated: Thursday 18 November 2021


<!-- MarkdownTOC -->

- [1. About](#1-about)
    - [Readings](#readings)
    - [Translations](#translations)
    - [Accuracy](#accuracy)
    - [Sources](#sources)
- [2. Style guide](#2-style-guide)
    - [Format of description field](#format-of-description-field)
    - [Reading style](#reading-style)

<!-- /MarkdownTOC -->


---

## 1. About

These files allow you to import or subscribe to the [Scottish Episcopal Church](http://www.scotland.anglican.org/) calendar (saints’ days, festivals and readings) using Microsoft Office Outlook Calendar, Google Calendar, or any other compatible calendar application.

The files were originally produced for my own personal use, so they may not have all the details that you want in them.

Feel free to adapt these files for your own use, subject to your agreement of the [license](https://github.com/garethjmsaunders/sec-digital-calendar/blob/master/LICENSE).


### Readings

The readings for category 4 saints days and lesser festivals are simply those for that day of the week in relation to the previous Sunday rather than specifically for that minor saint/festival. For example, the readings given for Ambrose of Milan (Friday 07 December) are those for the Friday of Advent 1.

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

The following style guide is use when compiling the documents.


### Format of description field

All information in the description field MUST be in
sentence case (i.e. NOT UPPERCASE) as Outlook 2007+ changes 
uppercase to a blue-formatted heading.


[DAY]

With saint [4] or [5]

```
Tuesday 30 November 2021

Andrew, Apostle, Patron of Scotland [4] Red
Week of Advent 1
Year C/2

EUCHARIST
Reading
Reading
Reading

DAILY PRAYER: Festivals
Reading
Reading
Reading
```


or

With saint [6]

```
Thursday 2 January 2020

Seraphim of Sarov, 1833 [6] White
Thursday after the First Sunday after Christmas (Green)
Ember Day | Rogation Day
Ordination of the Rt Revd Firstname Surname
Week of Advent 1
Year B/1

DAILY EUCHARIST
Reading
Reading
Reading

DAILY PRAYER: Anticipation
Reading
Reading
Reading

COLLECT
Lorem ipsum dolor sit amet,
consectetur adipiscing elit.
Sed laoreet, metus id sagittis ornare,
ex arcu rutrum enim, id porta nulla 
tortor et urna. Morbi sed quam velit.

---

Downloaded from https://www.seccalendar.org.uk/
v1.0.0 (2021-11-18)
```

or

Without saint

```
Wednesday after Pentecost 6 (Green)
Ember Day | Rogation Day
Ordination of the Rt Revd Firstname Surname
Week of Proper 14
Year B/1
```

or

[SUNDAY]

```
Remembrance Sunday
Pentecost 22 [3] Green; SPB Trinity 21
Week of Proper 32
Year A/1

[Daily] Eucharist (Green)

Continuous: | Thematic: | Feast day-specific:

OT
Psalm
[NT]
Gospel

Daily Prayer: {Week A | Season}
[Morning:]
OT
NT
Gospel

[Evening:]
OT
NT
Gospel

Alternative Psalms
Morning: Psalm 1 | Psalms 1 and 3 | {options below}
Evening: Psalm 2

COLLECT
Lorem ipsum dolor sit amet,
consectetur adipiscing elit.
Sed laoreet, metus id sagittis ornare,
ex arcu rutrum enim, id porta nulla 
tortor et urna. Morbi sed quam velit.
```


---
### Reading style

In this style guide I have changed a few of the conventions used in the SEC Calendar and Lectionary to reference Bible passages. This is in the interest of improved clarity.

Reading ranges MUST be laid out in the following formats:

```
Reading 1:1-10
Reading 2:1-10, 15-20
Reading 2:1, 15-20
Reading 3:1-10, (15-20)
Reading 3:(1), 15-20
Reading 3:(1-10), 15-20
Reading 4:1 - 5:10
Reading 4:1-5; 5:1-10
Reading 5:1-5 or Reading 6:1-10, 15-20
```
