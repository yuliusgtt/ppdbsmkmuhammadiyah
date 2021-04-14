<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css" media="all">
        html{
            margin:10px 10px
        }

        table{
            font-family: Calibri;
            letter-spacing: normal;
            width: 750px;
            border-collapse: collapse;
            font-size: 11pt;
        }

        td{
            font-family: Calibri;
        }
    </style>
</head>

<body>

<table align="center" border="0" cellpadding="1"  style="">
    <tbody>
    <tr>
        <td width="170px" style="font-size: 8pt;">
            <div align="center">
                <?php echo date("d/m/Y");?>
            </div>
        </td>
        <td colspan="2" width="4oopx">
            <div align="center">
                <p style="font-family:'Comic Sans MS'; font-size: 8pt;">
                    KARTU PENDAFTARAN PENERIMAAN PESERTA DIDIK BARU
                </p>
            </div>
        </td>
        <td width="150px">
        </td>
    </tr>
    <tr style="border-bottom: 1pt solid black;">
        <td>
            <div align="center">

            </div>
        </td>
        <td colspan="2">
            <div align="center" style="letter-spacing: -1px">
                <h4>
                    KARTU PENDAFTARAN PENERIMAAN PESERTA DIDIK BARU<br>
                    SMK MUHAMMADIYAH 1 PURBALINGGA<br>
                    TAHUN 2021/2022
                </h4>
            </div>
        </td>
        <td style="align-content: center;">

        </td>
    </tr>

    <tr>
        <td><br>Program Keahlian</td>
        <td width="250" colspan="2"><br>: <b>{{$Data->jurusan->jurusan}}</b></td>
        <td rowspan="9">
            QR
        </td>
    </tr>

    <tr>
        <td><br>No. Pendaftaran</td>
        <td colspan="2"><br>: {{$Data->nomor_pendaftaran}}</td>
    </tr>

    <tr>
        <td>Nama</td>
        <td colspan="2">: {{$Data->nama}}</td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td>: {{$Data->jeniskelamin->jenis_kelamin}}</td>
    </tr>

    <tr>
        <td>Tampat/Tanggal Lahir</td>
        <td>: {{$Data->tempat_lahir}} / {{$Data->tanggal_lahir}}</td>
    </tr>

    <tr>
        <td>Asal Sekolah</td>
        <td>: {{$Data->sekolah_asal}}</td>
    </tr>

    <tr>
        <td>Tahun Ijazah/Lulus</td>
        <td>: {{$Data->tahun_lulus}}</td>
    </tr>

    <tr>
        <td>Nilai UN</td>
        <td>: Bhs. IND: {{$Data->b_ind}}, Bhs. ING :{{$Data->b_ing}}, IPA :{{$Data->ipa}}, MTK:{{$Data->mtk}}</td>
    </tr>

    <tr>
        <td>Jumlah Nilai UN</td>
        <td>: <?php echo $Data->b_ind+$Data->b_ing+$Data->ipa+$Data->mtk; ?></td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td></td>
        <td>
            <div style="width:106px; height:135px; border:1px solid #000; text-align: center">
                <img src="={{ public_path("/storage/foto_calon_siswa/".$Data->foto) }}"  id="preview" alt="preview" style="width: 200px; height: 300px;">
            </div>
        </td>
        <td colspan="2">
            Purbalingga, 28 Desember 2020<br>
            Panitia PPDB SMK Muh. 1 Purbalingga<br>
            <br><br>
            Pebri Setiawan, S.Kom.<br>
            NBM. 1230483
        </td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr style="border-bottom: 1pt solid black;">
        <td colspan="4">
            <div align="center">
                <span style="font-size: 8pt; font-family: 'Comic Sans MS'; line-height: normal;">
                    - Kartu ini harus dibawa setiap kali berhubungan dengan Panitia Penerimaan Peserta 	Didik Baru (PPDB)<br>
                    - Kartu ini harap disimpan dengan baik sebagai bukti pendaftaran yang sah<br>
                    - Cek Data Online di <b>http://ppdb.smkmusaga.sch.id/</b>
                </span>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            - [___] Formulir Pendaftaran <br>
            - [___] Foto Copy Raport SMP/ MTs Smt. 1-5<br>
            - [___] Foto Copy Akta Kelahiran<br>
            - [___] Pas Foto 3x4 (2 Lembar)<br>
            - [___] Foto Copy KIP (Bagi yang punya)<br>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
