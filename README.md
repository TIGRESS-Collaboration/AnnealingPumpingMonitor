# AnnealingPumpingMonitor
Contains code and PCD designs and documentation regarding the remote monitor station for HPGe detector annealing and pumping.

In PAMonitor_Interface_Board you'll find the Eagle CAD design files for the PCB. 

In RaspberryPi_Code you'll find the home directory of the webserver which contains all the code necessary to run the monitor system.

Some notes:
1) The UUGear library included here must be used, there were some lines of code which needed to be commented out to tame excessive messages to the system logs.
2) readData.c is deprecated. Use readData.cpp
3) Same as above for build.sh and buildcpp.sh, respectively.
4) runMonitorStn.sh was to be a script that could be launched to do all work and checks necessary to ensure the monitor station would run, however, there are still some bugs to be ironed out.
