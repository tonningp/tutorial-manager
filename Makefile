# make file for working with github and other maintenance

push:
	git add . && git commit -a && git push

pull:
	git pull

rme:
	vi README.md

serve:
	php artisan serve

key:
	php artisan key:generate
