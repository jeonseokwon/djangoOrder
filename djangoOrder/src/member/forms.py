from django.forms import ModelForm
from member.models import *


class Form2(ModelForm):
    class Meta:
        model = member
        fields =['mid','mpassword','mname','mphone','mpost_no','maddress','maddress_detail']
 
class Formalt2(ModelForm):        
    class Meta:
        model = member
        fields =['mid','mpassword']