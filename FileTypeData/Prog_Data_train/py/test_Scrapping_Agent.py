#this file opens google.com and enters text in search bar

from selenium.webdriver.common.keys import Keys
from selenium import webdriver

#geckodriver is firefox selenium webdriver and needs to be on the classPath.
browser = webdriver.Firefox(executable_path='C:\Users\sethi\Desktop\selenium-2.47.1\Python Selenium\geckodriver.exe')
browser.get('https://www.google.com/')

elem = browser.find_element_by_id('lst-ib')  # Find the search box
elem.send_keys("bank of america careers usa") #search text in search box
elem.send_keys(Keys.ENTER) # hit enter


