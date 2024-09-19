# SimChecklists - Interactive Checklists
This is a very simple app, to use as a checklist manager for flight simulators. 
I guess it can be applied to any checklists, like grocery shopping, but it wasn't developed for that, i made for my own flight sim checklists.

Coded by [tibonev](http://classicgames.com.br)

Check the live version of this app @ [checklist.classicgames.com.br](http://checklist.classicgames.com.br)

## Status
![commit](https://img.shields.io/github/last-commit/jflores82/simchecklists) ![build](https://img.shields.io/github/actions/workflow/status/jflores82/simchecklists/test.yml)

## Screenshots
![01](http://classicgames.com.br/temp/simcheck01.png) ![02](http://classicgames.com.br/temp/simcheck02.png)
![03](http://classicgames.com.br/temp/simcheck03.png) 

## Disclaimer
None of the information or checklists in this application should be used for real-world flying. All the information here is for simulation purposes only!

## Usage
Select or upload the desired checklist, click on a item to automatically cross it, mark as done and highlight the next item. 
If you're on a touchscreen (recommended) just touch the item to cross and move to the next.

## Currently supported Aircraft 
- Airbus A320neo 
- Beechcraft Baron 58 
- Beechcraft Bonanza G36
- British Aerospace (BAe) 146
- Boeing 727
- Boeing 737-800
- Boeing 747-800
- Cessna 152
- Cessna 172 Skyhawk (G530 Version)
- Cessna 337 Skymaster (Thranda/X-Plane)
- Cessna CJ4 (Citation)
- Cessna 750 (Citation X)
- Piper Warrior 2 (JustFlight)
- Robin DR400/100 Cadet
- TBM900 (HotStart)
- Sukhoi Su25-t Frogfoot
- Sukhoi Su27 / Su33 Flanker

## Checklist Files
Checklist files are simple .txt files, the format is also very simple, basically 1 item per line, with a few exceptions:
- the very first line of the file is the main title (aka aircraft name)
- each new sublist (Pre-Flight, Before Takeoff, Taxi, etc) is named between double dashes (ie. --Before Flight--) also on its own line.
- each item use the format descriptive=state (ie. Parking Brake=ON). 
- If you want to credit the checklist, just use --Credits-- on the very last line of the checklist file.
If you upload your file through the interface please keep in mind the app is checking both the file extention (for .txt) and the MIME type (for plain/text), otherwise it will refuse your file.

### Theme Files 
You can choose from one of the available themes in the select box. 
To install a new theme, upload a .thm file to /assets/.
The format is very simple: one item per line, in the "property=value" format. 
All themes have both a dark and light version, inside the same file.

### Requirements
The code was written in PHP and Vanilla Javascript, you need to use at least PHP7 and a browser with support for ECMAS2019.
No need to build anything, it runs straight from the server.

### Version History: 
Version 1.2 (2024/09/19)
- Updated: Airbus A320neo (Simplefied) checklist by tibonev.
- Updated: Boeing 727 checklist by Lightdasher360.
- Updated: Cessna 337 Skymaster (Thranda/XP12) by Lightdasher360.
- Updated: TBM900 checklist by Lightdasher360.
- Updated: Piper Warrior 2 (JustFlight/XP11) by Lightdasher360.
- Fixed PHP error causing build error. 
- Added CI/CD support via Github Actions.

Version 1.1.9 (2024/08/26)
- Added: Secondary and Terciary cronometers.
- Added: Boeing 747-800 checklist by tibonev.
- Added: Boeing 727 checklist by Lightdasher360.
- Added: TBM900 checklist by Lightdasher360.
- Updated: C337 checklist by Lightdasher360.
- Updated: Boeing 737-800 checklist by tibonev.

Version 1.1.8 (2024/07/25)
- Added: Chronometer functionality.
- Added: Chronometer SVG icon.
- Added: new font (chrono.ttf - public domain)
- Added: Piper Warrior 2 checklist by Lightdasher360.
- Updated: Airbus A320neo checklist by tibonev.
- Updated: Beechcraft Bonanza G36 checklist by tibonev.
- Updated: Cessna Citation X checklist by Lightdasher360.
- Updated: Cessna Skymaster 337 checklist by Lightdasher360.

Version 1.1.7 (2024/07/11)
- Added: Sukhoi Su-25t (DCS) Checklist by tibonev.
- Added: Sukhoi Su-27 / Su-33 (DCS) checklist by tibonev.
- Updated: Boeing 737-800 checklist by tibonev.

Version 1.1.6 (2024/07/10)
- Fix: Issue #22 - tested on more devices, no error.
- Test Fix: Issue #30 - changed the code to record what is drawn on the scratch into a temp location into memory, resize and then re-draw, it doesn't scale, so things written outside of the new size are lost.
- Updated: BAe 146 (simplified) checklist by Lightdasher360.
- Added: Boeing 737-800 (Zibo) checklist by tibonev.
- Renamed: lists/a320neo_simple_tib.txt to lists/a320neo_simple.txt

Version 1.1.5 (2024/07/04)
- Fix: Issue #27 - changed inner div height from % of the screen to % of the parent element.
- Test Feature: Issue #22 - using wakelock api with the permission for self set into the header, need further testing, tested on android on chrome and adblock browsers.
- Added: Feature #29 - type pad, a notepad to use with the device keyboard, instead of mouse/finger.
- Added: SVG Icon for type pad.
- Updated: Cessna 152 Checklist (removed reference to a missing instrument (ampmeter)).
- Updated: Airbus A320neo Checklist (fixed typo on item on the shutdown sublist).
- Updated: Tweaked the visual aspect of all inner windows to better fit the themes.

Version 1.1.4 (2024/07/03)
- Fix: Issue #17 - tested on multiple devices ok.
- Fix: Issue #28 - add a flag to know when the canvas window is being opened/setup for the first time in session.
- Test Fix: Issue #27 - changed CSS for the scratch_window class and inner_canvas class.
- Added: Favicon for HTML.

Version 1.1.3 (2024/06/28)
- Fix: Issue #17 - loaded JS may be stuck in local storage, added versioning to all JS and CSS files.
- Fix: Issue #24 - loop checked and tested ok.
- Fix: Issue #25 - simple logic change to avoid showing null.
- Fix: Issue #26 - added a error handling routine.
- New: Scratch pad, just draw/write whatever you need on it.
- Added: Issue #23 - changed CSS to place the icons in a fixed column left of the screen if the screen width is up to 999px. from 1000px onwards, the old layout remains.
- Added: Comms frequencies for airports in the icao window.
- Added: METAR information for airports in the icao window.
- Added: British Aerospace (BAe) 146 (simplified) by Lightdasher360.
- Updated: Airbus320 Simplified Checklist (added procedure for the radios - required) (tibonev).
- Removed: Airbus A320 (Asobo v1) checklist, it was redudant after the Airbus A320 (Simplified checklist) update.
- Removed: redundant file assets/default.htm (the up-to-date version is assets/thm_default.thm).

Version 1.1.2 (2024/06/25)
- Fix: Issue #17 - double-clicking / double-tapping a sublist title, will automatically cross that entire sublist and move the highlight to first item of the next sublist, it will also auto-scroll to the next sublist.
- Fix: Issue #21 - changes to the cache tested accordingly.
- Fix: Issue #24 - the loop that generates the css color class had a logic error, fixed. it was in class checklist, method displayList($items).
- Updated: Cessna Citation X Checklist (Lightdasher360).
- Updated: Cesnns C337 Checklist (Lightdasher360).
- Added: Robin DR400/100 Cadet Checklist by tibonev.

Version 1.1.1 (2024/06/21)
- Fix: Issue #18 - was missing a javascript call to a div.
- Fix: Issue #19 - was missing a CSS parameter (overflow:auto) in the inner_icao class.
- Fix: Issue #20 - wrong theme value call on default theme was causing the bug, fixed. 
- Added: Cessna Citation X Checklist by Lightdasher360
- Added: Cessna Citation CJ4 Checklist by tibonev
- Added: Airbus A320neo (Simplified) Checklist by tibonev
- Information: Regarding Issue #21 - made changes to how the app is cached by the browser, but it needs testing before is considered fixed. It should be better now.

Version 1.1.0 (2024/06/18)
- Fix: Issue #15 - wrong javascript reference fixed, buttons working as intended.
- Fix: Issue #16 - Support to check for airport information via the flightplandatabase public api (ajax fetch).
- Fix: Beechcraft Bonanza G36 Checklist typo (Cowl Laps fixed to Cowl Flaps, line 42)
- Fix: Cessna 152 Checklist (Battery=ON line was duplicated)
- Added: Cessna 337 Skymaster (Thranda/X-Plane) Checklist by Lightdasher360

Version 1.0.3 (2024/06/13)
- Fix: Issue #13 - Added auto-scroll only if the clicked item is positioned after 65% of the screen height.
- Fix: Airbus A320neo Checklist (changed Fuel Pumps=ON position to work with a320neov2 and should be Toliss correct, if anyone can confirm).
- Tweak: Mininum swipe to uncheck is now user's screen width divided by two (window.screen / 2).
- Tweak: Renamed the c172_530.txt checklist to Cessna 172 Skyhawk (G530), since it is not exclusive to X-Plane 11.
- Added: Airbus A320neo (Asobo V1) Checklist.
- Added: Cessna 152 Checklist.
- Added: Beechcraft Bonanza G36 Checklist.

Version 1.0.2 (2024/06/12)
- Fix: Issue #11 - Altered the swipe function to only trigger after a mininum difference between touchStartX and touchEndX.
- Fix: Issue #12 - Added a check to see if there's a theme pre-selected, otherwise the selector goes automatically to thm_default.thm.
- Fix: Issue #14 - Added a function to sanitize and sort the list by the title of the aircraft.
- Added: Airbus A320neo Checklist.
- Added: Beechcraft Baron 58 Checklist.

Version 1.0.1 (2024/06/11)
- Fix: typo on _footer.php (inc/_footer.php).
- Fix: Issue #1 - Swiping left on a item will uncheck it (mobile only for now).
- Fix: Issue #2 - Added a function in inc/_class.checklist.php to validate the file extension and MIME type.
- Fix: Issue #3 - Added a SVG icon for refresh, at the top and bottom of the checklist.
- Fix: Issue #4 - Added a SVG icon for going back, both at the top and bottom of the checklist.
- Fix: Issue #5 - If the last line of the checklist is a title, its displayed in a different color.
- Fix: Issue #6 - Added a drop-down selector to choose from possible themes, choice is saved in a php_session.
- Fix: Issue #7 - Changed .thm files to support light/dark version of the colors.
- Fix: Issue #9 - Added proper spacing between elements.

Version 1.0: (2024/06/10)
- First version.
- Added: Checklist for Cessna 172 Skyhawk (X-Plane w/ 530 GPS).