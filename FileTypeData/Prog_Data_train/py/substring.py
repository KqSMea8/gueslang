import re
data = " ".join([raw_input() for _ in range(int(raw_input()))]) 
T=input()
for i in range(T):
        substr=raw_input()
        substr=substr.strip()
        pattern=r"[\w\d]+"+re.escape(substr)+r"[\w\d]+"
        out=re.findall(pattern,data)
        #out =re.findall(r"\B{}\B".format(substr),data)
        print len(out) 


