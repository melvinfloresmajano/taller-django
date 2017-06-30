from django.shortcuts import render

def post_list(request):
	return render(request, 'blog/post_list.php', {})
# Create your views here.
