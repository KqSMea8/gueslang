import re

text = " ".join([raw_input() for _ in range(int(raw_input()))])
for _ in range(int(raw_input())):
    print len(re.findall(r"\B{}\B".format(raw_input().strip()), text))
