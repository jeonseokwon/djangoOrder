from django.forms import ModelForm
from boardEx.models import *
class Form(ModelForm):
    class Meta:
        model = Article
        fields =['name','price','bun','dan','image','company']
        
class Formalt(ModelForm):
    class Meta:
        model = Order
        fields =['omid','oaid','oquantity']
