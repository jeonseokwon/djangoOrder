from django.shortcuts import render
from django.contrib import auth
from member.forms import *
from member.models import *
from django.shortcuts import redirect
from django.http import HttpResponse, HttpResponseRedirect
from django.urls import reverse

def write(request):
    message = None;
    if request.method == 'POST':
        form = Form2(request.POST)
        if form.is_valid():
            message = None;
            form.save()
        else:
            message = "ERROR"
    else:
        form = Form2() 
    return render(request,'member/write.html',{'form':form,'message':message})

def test(request):
    if request.method == 'POST':
        form = Form2(request.POST)
        if form.is_valid():
            obj = write(mid=form.data['mid'], mpassword=form.data['mpassword'], mname=form.data['mname'], 
                        mphone=form.data['mphone'], mpost_no=form.data['mpost_no'], maddress=form.data['maddress'], maddress_detail=form.data['maddress_detail'])
            obj.save()
    else:
        form = Form2() 
    return render(request,'member/write.html',{'form':form})

def list(request):
    memberList = member.objects.all()
    return render(request,'member/list.html',{'memberList':memberList})
    #      render(reuest,타켓템플릿,보낼특정변수와 값) 
    
def view(request):
    if "mid" in request.session:
        vmember = member.objects.get(mid=request.session['mid'])
    else:
        vmember = False
    return render(request,'member/view.html',{'member':vmember})


def index(request):
    memberList = member.objects.all()
    return render(request,'member/list.html',{'memberList':memberList})

def mylogin(request):
    if request.method == 'POST':
        username = request.POST['mid']
        password = request.POST['mpassword']
        if member.objects.get(mid=username,mpassword=password):
            request.session['mid'] = username;
            return HttpResponseRedirect(reverse('member:mylogin'))
        else:
            return render(request,{'error':'username or password is incorrect'})
    else:
        return render(request,'member/login.html')
    return render(request,'member/login.html')

def logout(request):
    request.session['mid'] = None;
    return redirect('/index/');

def signup(request):
    auth.logout(request)
    return redirect('/index/');
