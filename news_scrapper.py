import requests
from bs4 import BeautifulSoup
import json

tech_crunch = "https://techcrunch.com/"

r = requests.get(tech_crunch)

articles = []


soup = BeautifulSoup(r.content, 'html.parser')

title = soup.findAll("a", {"class": "post-block__title__link"})
body = soup.findAll("div", {"class": "post-block__content"})

# for links in title:
#     print(links['href'])


for items in range(len(body)):
    item_title = title[items].text
    item_body = body[items].text

    # print(item_title.strip())
    # print(item_body.strip())
    # print(title[items]['href'])
    # print("*********************")
    # print()

    news = {
        'heading': item_title.strip(),
        'body': item_body.strip(),
        'link': title[items]['href']
    }

    articles.append(news)

# List of dictionaries of news title, body and link
# for article in articles:
#     y = json.dumps(article)
#     print(y)
#     print()

y = json.dumps(articles, indent=2)

with open("news.json", "w") as outfile:
    outfile.write(y)
print(y)
