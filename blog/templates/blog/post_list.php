<!DOCTYPE html>
<html>
<head>
	<title>DESARROLLO WEB</title>
</head>
<body>
  <div>
  	<h1><a href="">Taller Django</a></h1>
  </div>
 	{% for post in posts %}
 		<div> 			
 			<h1><a href="">{{ post.title }}</a></h1>
 			<p>Publicado: {{ post.published_date }}</p>
 			<p>{{ post.text|linebreaksbr }}</p>
 		</div>
    	
    {% endfor %}
          
</body>
</html>