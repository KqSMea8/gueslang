import re
data="".join(raw_input() for  _ in range(int(raw_input())))
pattern=r'([\w.]+?@[\w.]+[\w]+)'
out=re.findall(pattern,data)
print ";".join(k for k in sorted(list(set(out))))
