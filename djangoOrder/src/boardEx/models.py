from django.db import models

# views.py에서 이 모델을 활용하고, 또  실제 데이타베이스를 다루는 후면작업을
# 하는 manage.py에서도 이 모델을 활용한다. 그래서 따로이 sql쿼리를 작성할 필요가 없게 된다. 
# Create your models here.
class Article(models.Model):
    name = models.CharField(max_length=300)
    price = models.CharField(max_length=300)
    bun = models.CharField(max_length=300)
    dan = models.CharField(max_length=300)
    image = models.ImageField(blank = True)
    company = models.CharField(max_length=300)
    
    def __str__(self):
        return self.name;
    
class Order(models.Model):
    odate = models.DateTimeField(auto_now_add=True)
    omid = models.CharField(max_length=300)
    oaid = models.CharField(max_length=300)
    oquantity = models.CharField(max_length=300)
    
    def __str__(self):
        return self.omid;