import urllib


def read_text():
    # get file
    quotes = open("./movie_quotes.txt")
    file = quotes.read()
    print(file) # print original file
    quotes.close() # you want to close any file you open
    print("")
    check_profanity(file)


def check_profanity(text):
    # connect to api at wdyl
    connect = urllib.urlopen("http://www.wdylike.appspot.com/?q=" + text)
    output = connect.read()
    #print(output) #returns true or false
    connect.close()
    if "true" in output:
        print("You might want to check this file fam.")
    elif "false" in output:
        print("Aye!! This is clean.")
    else:
        print("Couldn't scan the doc. Try again?")


read_text()
