<?php
$head = "
#      _____                     __    _     _   _____ _
#     |   __|___ ___ _ _ ___ ___|  |  |_|___| |_|  _  | |_ _ ___
#     |__   | -_|  _| | | -_|  _|  |__| |_ -|  _|   __| | | |_ -|
#     |_____|___|_|  \_/|___|_| |_____|_|___|_| |__|  |_|___|___|
# 
# ServerListPlus v3.4.8 - http://git.io/slp
#
# More information is available in the Wiki: http://git.io/slp-wiki
#
#
# This is the section where you can customize your server status ping!
#  - Default is the section for the status used when the player name is unknown.
#    Personalized is used if the client has already joined the server once.
#    Use %player% as placeholder for the player's name.
# 
# Features:
#  - Description (MotD): A short status message for your server, max. 2 lines.
#  - Players:
#    - Hover: The player hover message that is displayed if you hover the player count.
#    - Slots: Custom player slot formatting, see http://git.io/slp-slots
#  - Favicon:
#    - Use multiple server icons or the player's head as favicon, see http://git.io/oMhJlg
#    - Possible favicon sources: Files, Folders, URLs, Heads, Helms, Encoded
# 
#  More features are explained in the Wiki: http://git.io/slp-config
# 
# Usage:
#  - Add multiple entries for random messages.
#  - Save the file with valid UTF-8 encoding for special characters.
#  - Available placeholders:
#    - Player name: %player%
#    - Player count: %online%, %max%, %online@server% %online@world%
#    - Random online player name: %random_player%
--- !Status
Default:
  Description:
";
$mid="
  Players:
    Hover:
    - |-
      &aWelcome to &lA Minecraft Server&a!
      &aCurrently &e&l%online% &aplayers are playing on our server!
      Personalized:
  Description:
";
$foot="
  Players:
    Hover:
    - |-
      &aWelcome back, &l%player%&a!
      &aCurrently &e&l%online% &aplayers are playing on our server!
# Stats: Enable/disable sending plugin statistics.
# PlayerTracking: Enable/disable tracking of player names to their IP-Addresses.
#   - Persistence can be disabled with the toggle in the Storage section.
# Samples: Toggle using multiple player infos for the player hover message.
#     May prevent the annoying ... and x more ... message for bigger servers
#     DynamicPlayers is special and aligns the number with the number of
#     random players used in placeholders.
# Unknown: Placeholder replacement if the real value is unknown.
# Favicon: Options for the creation / downloading of favicons:
#  - RecursiveFolderSearch: Also search for favicons in sub directories.
#  - SkinSource: The URL to get the Minecraft Skins from. (%s -> player name)
#  - ResizeStrategy: The strategy used to resize too small or too big favicons.
#      NONE (keep them as is, will probably fail), SCALE (scale them to the correct size)
--- !Plugin
Stats: true
PlayerTracking:
  Enabled: true
  Storage: !JSONStorage
    Enabled: true
    SaveDelay: 5m
Samples:
  Multiple: false
  DynamicPlayers: false
Unknown:
  PlayerName: player
  PlayerCount: ???
  Date: ???
Favicon:
  Timeout: 10s
  RecursiveFolderSearch: false
  ResizeStrategy: SCALE";

?>
