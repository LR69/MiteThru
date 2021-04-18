# MiteThru
MiteThru is a raspberry based system used to count red mites going to/from a hen  

# How the miteThru works:

A miteThru is a device that counts mites ascending and descending from a perch. It is able to classify them according to their size. The miteThru uses an infrared camera, to visualize the mites.

A circular boundary is placed around the roost. Mites passing inside this circle are considered "IN", mites outside are considered "OUT". To avoid indecision due to mites standing on the line, or moving around it, a counting or hysteresis zone is defined. The mite that is "OUT" has to cross the inner disc of the counting zone to go to "IN". The mite that is "IN" must cross the outer disc of the counting zone to go to "OUT".

## Counting principle

The miteThru places on the registered view :

- A monitoring area
- A referencing zone
- A counting area
- A border  
