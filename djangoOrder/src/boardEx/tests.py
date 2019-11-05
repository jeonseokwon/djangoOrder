from django.test import TestCase
from django.utils import timezone
from .models import Article, Order
from django.urls import reverse
from member.models import *

def create_article(a_name, a_price, a_bun, a_dan, a_company, a_image):
    return Article.objects.create(name=a_name, price=a_price, bun=a_bun, dan=a_dan, company=a_company, image=a_image)

def create_order(a_omid, a_oaid, a_oquantity, a_odate):
    return Order.objects.create(omid=a_omid, oaid=a_oaid, oquantity=a_oquantity, odate=a_odate)

class tests(TestCase):
    def test_article(self):
        response = self.client.get(reverse('boardEx:list'))
        self.assertEqual(response.status_code, 200)
    
    def test_article_exists(self):
        create_article('감', '10000', '식품', 'kg', '감나무', '')
        response = self.client.get(reverse('boardEx:list'))
        self.assertEqual(response.status_code, 200)
        self.assertQuerysetEqual(
            response.context['articleList'],
            ['<Article: 감>']
        )
        
    def test_order(self):
        response = self.client.get(reverse('boardEx:orderlist'))
        self.assertEqual(response.status_code, 200)
    
    def test_order_exists(self):
        create_order('jsw', '1', '2', timezone.now())
        response = self.client.get(reverse('boardEx:orderlist'))
        self.assertEqual(response.status_code, 200)