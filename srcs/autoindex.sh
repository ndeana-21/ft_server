if (cat /etc/nginx/sites-available/nginx-conf | grep 'autoindex on' > /dev/null)
then
	sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-available/nginx-conf
	sed -i 's/index_unexist.php/index.php/' /etc/nginx/sites-available/nginx-conf
else
	sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-available/nginx-conf
	sed -i 's/index.php/index_unexist.php/' /etc/nginx/sites-available/nginx-conf
fi
nginx -s reload