<!-- buatlah query untuk menampilkan peserta dengan gaji tertinggi
SELECT * FROM kawahedukasi WHERE gaji in (SELECT MAX(gaji) FROM kawahedukasi)

- buatlah query untuk menampilkan peserta BACKEND dengan nilai tertinggi dan gaji tertinggi
SELECT * FROM kawahedukasi WHERE nilai in (SELECT MAX(nilai) FROM kawahedukasi where kelas = 'BACKEND') and gaji in (SELECT MAX(gaji) FROM kawahedukasi where kelas = 'BACKEND')

- buatlah query untuk melihat total peserta yang berada dalam kelas frontend
SELECT COUNT(id) as total_peserta from kawahedukasi where kelas = 'FRONTEND';

- buatlah query untuk menampilkan jumlah kehadiran tertinggi dan nilai tertinggi dalam kelas frontend
SELECT * FROM kawahedukasi WHERE jumlah_kehadiran in (SELECT MAX(jumlah_kehadiran) FROM kawahedukasi where kelas = 'FRONTEND') and nilai in (SELECT MAX(nilai) FROM kawahedukasi where kelas = 'FRONTEND'); -->