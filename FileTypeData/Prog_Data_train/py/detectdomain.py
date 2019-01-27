import re
data="".join(raw_input() for _ in range(int(raw_input())))
pattern=r"https{0,1}://(?:www.|ww2.|)([\w.-]+\.[a-zA-Z]+)"
out=re.findall(pattern,data)
ls=list(set(out))
i=0
while i < len(ls):
    if ls[i].startswith('www'):
        link=ls[i].split(".")
        ls.pop(i)
        link.pop(0)
        out=".".join(k for k in link)
        #print out 
        ls.append(out)
        i=i-1
    i=i+1    

print ";".join(k for k in sorted(ls))
