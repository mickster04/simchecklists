# SimChecklists - Interactive Checklists
This is a very simple app, to use as a checklist manager for flight simulators. 
I guess it can be applied to any checklists, like grocery shopping, but it wasn't developed for that, i made for my own flight sim checklists.

Coded by [tibonev](http://classicgames.com.br)

Check the live version of this app @ [checklist.classicgames.com.br] (http://checklist.classicgames.com.br)

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


### Theme Files 
You can define a new theme file in the 'inc/_config.php', it must be a valid file placed within the 'assets subfolder'.
The format is very simple: one item per line, in the "property=value" format.


### Requirements
The code was written in PHP and Javascript, you need to use at least PHP7 and a browser with support for ECMAS2019.


### Version History: 

Version 1.0: (June 2024)
- First version.
- Added checklists for Cessna 172 Skyhawk (X-Plane w/ 530 GPS).
