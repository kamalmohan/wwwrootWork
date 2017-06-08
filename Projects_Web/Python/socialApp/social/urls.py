from django.conf.urls import url
from social import views


urlpatterns = [
    url(r'^$', views.HomePageView.as_view()),
    url(r'^profile/$', views.ProfilePageView.as_view()),
    url(r'^docs/$', views.DocsPageView.as_view()),
    url(r'^login/$', views.LoginPageView.as_view()),
    url(r'^notifications/$', views.NotificationPageView.as_view()),
]
