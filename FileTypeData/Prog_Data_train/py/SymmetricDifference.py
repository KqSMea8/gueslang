if __name__ == '__main__':
    m=int(input())
    numb = input()
    lism = list(map(int, numb.split()))
    n=input()
    numb = input()
    lisn=list(map(int,numb.split()))
    setm=set(lism)
    setn=set(lisn)
    dm=setm.difference(setn)
    dn=setn.difference(setm)
    d=dm+dn
    d.sort()
    print (d)
    for i in d:
        print (i)
