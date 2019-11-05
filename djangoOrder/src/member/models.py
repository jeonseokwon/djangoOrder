from django.db import models

class member(models.Model):
    mid = models.CharField(max_length=300,primary_key=True)
    mpassword = models.CharField(max_length=300)
    mname = models.CharField(max_length=300)
    mphone = models.CharField(max_length=300)
    mpost_no = models.CharField(max_length=300)
    maddress = models.CharField(max_length=300)
    maddress_detail = models.CharField(max_length=300)
    
    def __str__(self):
        return self.mname;