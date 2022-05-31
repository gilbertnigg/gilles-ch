# gilles-ch

### Install frontend
- [Laravel Mix](https://laravel-mix.com  )
- [Tailwind CSS](https://tailwindcss.com )
```
npm i
```

### Install backend
- [Kirby CMS](https://getkirby.com  )
```
cd public
composer install
```

---

### Setup

Copy/setup `.env` from `.env.example`

No `public/content` stored in git. Add empty `home.txt` to run Kirby CMS:
```
mkdir -p public/content/home
touch public/content/home/home.txt
```

---

### Run `npm` scripts

watch
```
npm run watch
```
production
```
npm run prod
```

---
© [Gilbert Nigg](http://www.gilles.ch) 2022
