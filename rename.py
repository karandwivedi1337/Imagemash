import glob
import string
import os

#get all the jpg file names in the current folder
files = glob.glob("*.jpg") 
#sort the list
files.sort()
count = 0
# and rename each file
for f in files:
    count = count + 1
    #n = string.zfill(count,4) + ".jpg"
    n=str(count)+".jpg";
    print f, n, 
    try:
        os.rename(f, n)
        print 'file renamed'
    except:
        print "error: didn't rename"

