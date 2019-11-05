from django.urls import path 
from . import views 


app_name ='member'
urlpatterns=[
    path('',views.index,name='index'),
    path('write/',views.write,name='write'), #가운데 write는 views.py에서 호출할 함수이름 이다.
    path('test/',views.test,name='test'), #가운데 write는 views.py에서 호출할 함수이름 이다.
    path('list/',views.list,name='list'),
    path('view/',views.view,name='view'),
    path('mylogin/',views.mylogin,name='mylogin'),
    path('logout/',views.logout,name='logout'),
]
