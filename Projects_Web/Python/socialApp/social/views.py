from django.shortcuts import render
from django.views.generic import TemplateView


class HomePageView(TemplateView):
    def get(self, request, **kwargs):
        return render(request, 'index.html', context=None)


class ProfilePageView(TemplateView):
    template_name = "profile/index.html"


class DocsPageView(TemplateView):
    template_name = "docs/docs.html"


class LoginPageView(TemplateView):
    template_name = "login/index.html"


class NotificationPageView(TemplateView):
    template_name = "notifications/index.html"
