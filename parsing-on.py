import time
import requests
from bs4 import BeautifulSoup
import os
import undetected_chromedriver
from selenium import webdriver
from selenium.webdriver.chrome.service import Service

import requests
from bs4 import BeautifulSoup
import re


import io
import os
import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.wait import WebDriverWait
import undetected_chromedriver
from icecream import ic

# Удаление неиспользуемого импорта
# from bs4 import BeautifulSoup

class Mvidea():
    def __init__(self):
        self.driver = undetected_chromedriver.Chrome()

        self.specification_div_class = "product-title__head"
        self.value_div_class = "product-price__value"

    def get_shit(self):
        self.driver.get("https://www.chitai-gorod.ru/novelty")
        time.sleep(15)
        specifications_names_div = WebDriverWait(self.driver, 5).until(
            EC.presence_of_all_elements_located((By.CLASS_NAME, self.specification_div_class))
        )

        specifications_values_div = WebDriverWait(self.driver, 5).until(
            EC.presence_of_all_elements_located((By.CLASS_NAME, self.value_div_class))
        )

        specifications_names = self.specification_web_to_list(specifications_names_div)
        specifications_values = self.specification_web_to_list(specifications_values_div)

        return specifications_names, specifications_values


    def specification_web_to_list(self, web_list):
        new_list = []
        for item in web_list:
            new_list.append(item.text)

        return new_list

class bookvoed():
    def __init__(self):
        self.driver = undetected_chromedriver.Chrome()
        
        self.specification_div_class = "product-description__link"
        self.value_div_class = "price-info__price"

    def get_shit(self):
        self.driver.get("https://www.bookvoed.ru/novye-knigi")
        time.sleep(15)
        specifications_names_div = WebDriverWait(self.driver, 5).until(
            EC.presence_of_all_elements_located((By.CLASS_NAME, self.specification_div_class))
        )

        specifications_values_div = WebDriverWait(self.driver, 5).until(
            EC.presence_of_all_elements_located((By.CLASS_NAME, self.value_div_class))
        )

        specifications_names = self.specification_web_to_list(specifications_names_div)
        specifications_values = self.specification_web_to_list(specifications_values_div)

        return specifications_names, specifications_values
    

    def specification_web_to_list(self, web_list):
        new_list = []
        for item in web_list:
            new_list.append(item.text)

        return new_list


if __name__ == "__main__":
    mvidea = Mvidea()
    guyi = mvidea.get_shit()
    ic(guyi)
    Book = bookvoed()
    book = Book.get_shit()
    ic(book)
    print(guyi)
    print(book)
