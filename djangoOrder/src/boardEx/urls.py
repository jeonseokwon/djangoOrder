from django.contrib import admin
from django.urls import path,include
from boardEx import views
app_name ='boardEx'
urlpatterns = [
    path('write/',views.write,name='write'), #가운데 write는 views.py에서 호출할 함수이름 이다.
    path('list/',views.list,name='list'),
    path('orderlist/',views.orderlist,name='orderlist'),
    path('orderalt/<int:num>/',views.orderalt,name='orderalt'),
    path('view/<int:num>/',views.view,name='view'),
    path('template/',views.template,name='template'),
]

