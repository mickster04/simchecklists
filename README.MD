# SimChecklists - Interactive Checklists
This is a very simple app, to use as a checklist manager for flight simulators. 
I guess it can be applied to any checklists, like grocery shopping, but it wasn't developed for that, i made for my own flight sim checklists.

Coded by [tibonev](http://classicgames.com.br)

Check the live version of this app @ [checklist.classicgames.com.br] (http://checklist.classicgames.com.br)

## Status
![commit](https://img.shields.io/github/last-commit/jflores82/simchecklists) ![build](https://img.shields.io/github/actions/workflow/status/jflores82/simchecklists/test.yml)


## Screenshots

![01](http://classicgames.com.br/temp/simcheck01.png) ![02](http://classicgames.com.br/temp/simcheck02.png)
![03](http://classicgames.com.br/temp/simcheck03.png) 

## Usage
Select or upload the desired checklist, click on a item to automatically cross it, mark as done and highlight the next item. 
If you're on a touchscreen (recommended) just touch the item to cross and move to the next.


## Checklist Files
Checklist files are simple .txt files, the format is also very simple, basically 1 item per line, with a few exceptions:
- the very first line of the file is the main title (aka aircraft name)
- each new sublist (Pre-Flight, Before Takeoff, Taxi, etc) is named between double dashes (ie. --Before Flight--) also on its own line.
- each item use the format descriptive=state (ie. Parking Brake=ON). 
- If you want to credit the checklist, just use --Credits-- on the very last line of the checklist file.


### Theme Files 
You can define a new theme file in the 'inc/_config.php', it must be a valid file placed within the 'assets subfolder'.
The format is very simple: one item per line, in the "property=value" format. 
All themes have both a dark and light version, inside the same file.


### Requirements
The code was written in PHP and Javascript, you need to use at least PHP7 and a browser with support for ECMAS2019.


### Version History: 

Version 1.0.2 (2024/06/13)
- Fix: Issue #11 - Altered the swipe functio to only trigger after a mininum difference between touchStartX and touchEndX.
- Fix: Issue #12 - Added a check to see if there's a theme pre-selected, otherwise the selector goes automatically to thm_default.thm.
- Fix: Issue #14 - Added a function to sanitize and sort the list by the title of the aircraft.
- Added: Airbus A320neo Checklist.
- Added: Beechcraft Baron 59 Checklist.


Version 1.0.1 (2024/06/11)
- Fixed typo on _footer.php (inc/_footer.php).
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
- Added checklists for Cessna 172 Skyhawk (X-Plane w/ 530 GPS).
