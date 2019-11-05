from django.shortcuts import render
from boardEx.forms import * 
from member.forms import * 
# 입력을 할건지 출력을 할건지 결정하고 모델로 신호를 보낸다.
# Create your views here.
def write(request):
    if request.method == 'POST':
        form = Form(request.POST)
        if form.is_valid():
            form.save()
    else:
        form = Form() 
    return render(request,'boardEx/write.html',{'form':form})

def orderalt(request,num):
    message = None;
    article = Article.objects.get(id=num)
    if "mid" in request.session:
        vmember = member.objects.get(mid=request.session['mid'])
    else:
        vmember = False
    if request.method == 'POST':
        print('posts')
        form = Formalt(request.POST)       
        if form.is_valid():
            print('vaild')
            message = None;
            form.save()
        else:            
            print('notvaild')
            print(form.errors)
            message = "ERROR"
    else:
        form = Formalt()
    return render(request,'boardEx/orderalt.html',{'form':form,'article':article,'member':vmember,'message':message})

def list(request):
    articleList = Article.objects.all()
    return render(request,'boardEx/list.html',{'articleList':articleList})
    #      render(request,타켓템플릿,보낼특정변수와 값) 
    
def orderlist(request):
    articleList = Article.objects.all()
    orderList = Order.objects.filter(omid=request.session.get('mid',''))
    # orderList = Order.objects.filter(omid=request.session['mid'])
    # https://cjh5414.github.io/django-keyerror/
    return render(request,'boardEx/orderlist.html',{'articleList':articleList,'orderList':orderList})
    #      render(request,타켓템플릿,보낼특정변수와 값) 
    
def view(request,num=1):
    article = Article.objects.get(id=num)
    return render(request,'boardEx/view.html',{'article':article})

def template(request):
    #articleList = Article.objects.all()
    #return render(request,'index.html',{'articleList':articleList})
    return render(request,'boardEx/template.html');
