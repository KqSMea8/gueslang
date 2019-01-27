#!/usr/bin/env python

import sys
import re

link_pattern=re.compile('(?:[a-zA-Z]+)://(?:www.|ww2.|)([\w\.\-]+\.[a-zA-Z]{2,5})')
num_of_lines=int(raw_input())

content=sys.stdin.read()

domain_list = link_pattern.findall(content)
domain_list = list(set(domain_list)) #remove duplicates
domain_list.sort()
print ";".join(domain_list)
