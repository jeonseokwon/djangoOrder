from django.test import TestCase
from .models import member
from django.urls import reverse

def create_member(a_mid, a_mpassword, a_mname, a_mphone, a_mpost_no, a_maddress, a_maddress_detail):
    return member.objects.create(mid=a_mid, mpassword=a_mpassword, mname=a_mname, mphone=a_mphone, 
                    mpost_no=a_mpost_no, maddress=a_maddress, maddress_detail=a_maddress_detail)

class tests(TestCase):
    def test_member(self):
        response = self.client.get(reverse('member:list'))
        self.assertEqual(response.status_code, 200)
    
    def test_member_exists(self):
        create_member('bb', 'bb', 'bb', 'bb', 'bb', 'bb', 'bb')
        response = self.client.get(reverse('member:list'))
        self.assertEqual(response.status_code, 200)
        self.assertQuerysetEqual(
            response.context['memberList'],
            ['<member: bb>']
        )