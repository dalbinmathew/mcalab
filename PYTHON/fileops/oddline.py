def copyoddlines(ifile, ofile):
    with open(ifile, 'r') as ifile, open(ofile, 'w') as ofile:
        for i, line in enumerate(ifile):
            if i % 2 != 0:
                ofile.write(line)

ifile = "sample.txt"
ofile = "sample2.txt"
copyoddlines(ifile, ofile)
