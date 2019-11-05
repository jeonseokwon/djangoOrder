from django.contrib import admin

# Register your models here.
from boardEx.models import Article,Order

class ArticleAdmin(admin.ModelAdmin):
    #fields = ['title','name','cdate'] # 나열순서에 의해 form에 반영
    list_display = ('name','price','bun','dan')
    list_filter = ['bun']
    search_fields = ['name','price','bun','dan']
    
class OrderAdmin(admin.ModelAdmin):
    #fields = ['title','name','cdate'] # 나열순서에 의해 form에 반영
    list_display = ('odate','omid','oaid','oquantity')
    list_filter = ['omid']
    search_fields = ['odate','omid','oaid','oquantity']

admin.site.register(Article,ArticleAdmin);
admin.site.register(Order,OrderAdmin);
