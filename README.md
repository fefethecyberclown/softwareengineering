## AOL SOFTWARE ENGINEERING WebApp MASBRO.GG
```
2540125024-Felysia Meytri
2540123214-Rheinhard Salomo Putra Simon
2501962126-Timothy Gilbert
2540123100-Victor Benaya
```
Jika Docker Error dapat menggunakan localhost di repo  https://github.com/fefethecyberclown/localSE

LANGKAH RUN WEBSITE


Clone Github ini
Masuk ke terminal

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/4fcf3b9e-2cc2-48b1-8394-1470dc5d37dd)
```
cd database | Masuk ke folder database
```

Build docker image untuk database dengan command

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/df5af808-1727-485d-8567-718d19b9666d)
```
docker build -t valo-db .
```

Setelah image sukses dibuat, Run container database dengan command

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/5b16f021-d372-4e9d-ac9c-a12d5e36f5db)
```
docker run --name ValoDB valo-db
```
Docker Database sudah sukses di run

Buka Command Prompt atau Tab baru (Jangan tutup tab database, minimize saja)

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/32035c1f-5bd8-445e-a051-3f71d91fc468)
```
cd Masbrogg | Masuk ke folder Website
```

Build docker image untuk Web dengan command

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/fc822e1c-4792-4f23-a23f-33dc110d3633)
```
docker build -t valo-web .
```

Setelah image sukses dibuat, Run container Web dengan command

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/19593419-f66f-4493-bd12-06e37fec632c)
```
docker run -p 80:80 --name ValoWeb --link ValoDB valo-web
```

Docker Run bebas ditaruh di fowarding port mana saja. Bila port 80 sudah terpakai, ubah fowarding port menjadi port lain

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/d8f71be6-cc75-4c7c-b3d7-bc914a11c963)
```
REGISTER
Buat akun
Username: 5-15 karakter
Email
Password: minimal 8 karakter
```
LOGIN dengan akun yang sudah diregis
Atau bisa dengan menggunakan Credentials berikut:

```
Username: Felysia
Email: felysiameytri@gmail.com
Password: Fefe123_
```

![image](https://github.com/fefethecyberclown/softwareengineering/assets/88881191/6e3215b7-5d4b-4c46-96a9-e64c61a0e530)
Enjoyy !!
