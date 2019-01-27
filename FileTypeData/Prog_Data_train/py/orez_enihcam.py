# Exercise 2.23
# Author: Noah Waterfield Price

eps = 1.0
while 1.0 != 1.0 + eps:
    print '...............', eps
    eps /= 2.0
print 'final eps:', eps

"""
Sample run:
python machine_zero.py
............... 1.0
............... 0.5
............... 0.25
............... 0.125
............... 0.0625
....
............... 8.881784197e-16
............... 4.4408920985e-16
............... 2.22044604925e-16
final eps: 1.11022302463e-16
"""
