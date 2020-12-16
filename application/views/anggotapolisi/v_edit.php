<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
        <div class="card-header card text-white bg-primary">
        <h2>Tambah Data Personil</h2>
        </div>
        <div class="card-body">
        <?php foreach($anggotapolisi as $p){ ?>
            <form method="post" action="<?php echo base_url()?>Anggota_polisi/update">
            <div class="form-row">
                <input type="hidden" name="id" value="<?php echo $p->id ?>" class="form-control">
                <div class="form-group col-md-3">
                    <label>PANGKAT:</label>
                    <select name="pangkat" class="form-control" required>
                    <option>-- Pilih --</option>

                    <?php 
                      foreach ($pangkat as $value) { ?>
                        <option <?php if($value->pangkat == $p->pangkat){ echo 'selected="selected"'; } ?> value="<?php echo $value->pangkat ?>"><?php echo $value->pangkat ?></option>
                    <?php 
                  }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                    <label>SPIM:</label>
                    <input type="text" class="form-control" name="spim" id="spim" value="<?php echo $p->spim ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>ITWASDA:</label>
                    <input type="text" class="form-control" name="itwasda" id="itwasda" value="<?php echo $p->itwasda ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OPS:</label>
                    <input type="text" class="form-control" name="ops" id="ops" value="<?php echo $p->ops ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>RENA:</label>
                    <input type="text" class="form-control" name="rena" id="rena" value="<?php echo $p->rena ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>SDM:</label>
                    <input type="text" class="form-control" name="sdm" id="sdm" value="<?php echo $p->sdm ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>SARPRAS:</label>
                    <input type="text" class="form-control" name="sarpras" id="sarpras" value="<?php echo $p->sarpras ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>PROPAM:</label>
                    <input type="text" class="form-control" name="propam" id="propam" value="<?php echo $p->propam ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>TI:</label>
                    <input type="text" class="form-control" name="ti" id="ti"value="<?php echo $p->ti ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>DOKKES:</label>
                    <input type="text" class="form-control" name="dokkes" id="dokkes" value="<?php echo $p->dokkes ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>KEU:</label>
                    <input type="text" class="form-control" name="keu" id="keu" value="<?php echo $p->keu ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>KUM:</label>
                    <input type="text" class="form-control" name="kum" id="kum" value="<?php echo $p->kum ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>HUMAS:</label>
                    <input type="text" class="form-control" name="humas" id="humas" value="<?php echo $p->spim ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>LANTAS:</label>
                    <input type="text" class="form-control" name="lantas" id="lantas" value="<?php echo $p->lantas ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>KRIM UM:</label>
                    <input type="text" class="form-control" name="krim_um" id="krim_um" value="<?php echo $p->krim_um ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>KRIMSUS:</label>
                    <input type="text" class="form-control" name="krimsus" id="krimsus" value="<?php echo $p->krimsus ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>INTEL:</label>
                    <input type="text" class="form-control" name="intel" id="intel" value="<?php echo $p->intel ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>BIMAS:</label>
                    <input type="text" class="form-control" name="bimas" id="bimas" value="<?php echo $p->bimas ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>SABHARA:</label>
                    <input type="text" class="form-control" name="sabhara" id="sabhara" value="<?php echo $p->sabhara ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OBVIT:</label>
                    <input type="text" class="form-control" name="obvit" id="obvit" value="<?php echo $p->obvit ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>POLAIR:</label>
                    <input type="text" class="form-control" name="polair" id="polair" value="<?php echo $p->polair ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>NARKOBA:</label>
                    <input type="text" class="form-control" name="narkoba" id="narkoba" value="<?php echo $p->narkoba ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>BRIMOB:</label>
                    <input type="text" class="form-control" name="brimob" id="brimob" value="<?php echo $p->brimob ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>SPN:</label>
                    <input type="text" class="form-control" name="spn" id="spn" value="<?php echo $p->spn ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>LABFOR:</label>
                    <input type="text" class="form-control" name="labfor" id="labfor" value="<?php echo $p->labfor ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>YANMA:</label>
                    <input type="text" class="form-control" name="yanma" id="yanma" value="<?php echo $p->yanma ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>RUMKIT:</label>
                    <input type="text" class="form-control" name="rumkit" id="rumkit" value="<?php echo $p->rumkit ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>RESTA:</label>
                    <input type="text" class="form-control" name="resta" id="resta" value="<?php echo $p->resta ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>MUBA:</label>
                    <input type="text" class="form-control" name="muba" id="muba" value="<?php echo $p->muba ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>B.ASIN:</label>
                    <input type="text" class="form-control" name="b_asin" id="b_asin" value="<?php echo $p->b_asin ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OKI:</label>
                    <input type="text" class="form-control" name="oki" id="oki" value="<?php echo $p->oki ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OI:</label>
                    <input type="text" class="form-control" name="oi" id="oi" value="<?php echo $p->oi ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>M.ENIM:</label>
                    <input type="text" class="form-control" name="m_enim" id="m_enim" value="<?php echo $p->m_enim ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>PRABU:</label>
                    <input type="text" class="form-control" name="prabu" id="prabu" value="<?php echo $p->prabu ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>LAHAT:</label>
                    <input type="text" class="form-control" name="lahat" id="lahat" value="<?php echo $p->lahat ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>P.ALAM:</label>
                    <input type="text" class="form-control" name="p_alam" id="p_alam" value="<?php echo $p->p_alam ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OKU:</label>
                    <input type="text" class="form-control" name="oku" id="oku" value="<?php echo $p->oku ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OKUT:</label>
                    <input type="text" class="form-control" name="okut" id="okut" value="<?php echo $p->okut ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>OKUS:</label>
                    <input type="text" class="form-control" name="okus" id="okus" value="<?php echo $p->okus ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>LINGGAU:</label>
                    <input type="text" class="form-control" name="linggau" id="linggau" value="<?php echo $p->linggau ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>MURA:</label>
                    <input type="text" class="form-control" name="mura" id="mura" value="<?php echo $p->mura ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>4 LAWANG:</label>
                    <input type="text" class="form-control" name="lawang" id="4lawang" value="<?php echo $p->lawang ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>PALI:</label>
                    <input type="text" class="form-control" name="pali" id="pali" value="<?php echo $p->pali ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>MURATARA:</label>
                    <input type="text" class="form-control" name="muratara" id="muratara" value="<?php echo $p->muratara ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>JUMLAH:</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" readonly="readonly" value="<?php echo $p->jumlah ?>">
                </div>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary"  value="Simpan">
            </div>
            </form>
                <?php }?>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#spim, #itwasda, #ops, #rena, #sdm, #sarpras, #propam, #ti, #dokkes, #keu, #kum, #humas, #lantas, #krim_um, #krimsus, #intel, #bimas, #sabhara, #obvit, #polair, #narkoba, #brimob, #spn, #labfor, #yanma, #rumkit, #resta, #muba, #b_asin, #oki, #oi, #m_enim, #prabu, #lahat, #p_alam, #oku, #okut, #okus, #linggau, #mura, #4lawang, #pali, #muratara").on('input',function() {
            var spim  = $("#spim").val();
            var itwasda = $("#itwasda").val();
            var ops = $("#ops").val();
            var rena = $("#rena").val();
            var sdm = $("#sdm").val();
            var sarpras = $("#sarpras").val();
            var propam = $("#propam").val();
            var ti = $("#ti").val();
            var dokkes = $("#dokkes").val();
            var keu = $("#keu").val();
            var kum = $("#kum").val();
            var humas = $("#humas").val();
            var lantas = $("#lantas").val();
            var krim_um = $("#krim_um").val();
            var krimsus = $("#krimsus").val();
            var intel = $("#intel").val();
            var bimas = $("#bimas").val();
            var sabhara = $("#sabhara").val();
            var obvit = $("#obvit").val();
            var polair = $("#polair").val();
            var narkoba = $("#narkoba").val();
            var brimob = $("#brimob").val();
            var spn = $("#spn").val();
            var labfor = $("#labfor").val();
            var yanma = $("#yanma").val();
            var rumkit = $("#rumkit").val();
            var resta = $("#resta").val();
            var muba = $("#muba").val();
            var b_asin = $("#b_asin").val();
            var oki = $("#oki").val();
            var oi = $("#oi").val();
            var m_enim = $("#m_enim").val();
            var prabu = $("#prabu").val();
            var lahat = $("#lahat").val();
            var p_alam = $("#p_alam").val();
            var oku = $("#oku").val();
            var okut = $("#okut").val();
            var okus = $("#okus").val();
            var linggau = $("#linggau").val();
            var mura = $("#mura").val();
            var lawang = $("#4lawang").val();
            var pali = $("#pali").val();
            var muratara = $("#muratara").val();

            var jumlah = parseInt(spim) + parseInt(itwasda) + parseInt(ops) + parseInt(rena) + 
            parseInt(sdm) + parseInt(sarpras) + parseInt(propam) + parseInt(ti) + parseInt(dokkes) + parseInt(keu) + parseInt(kum) + parseInt(humas) + 
            parseInt(lantas) + parseInt(krim_um) + parseInt(krimsus) + parseInt(intel) + parseInt(bimas) + parseInt(sabhara) + parseInt(obvit) + 
            parseInt(polair) + parseInt(narkoba) + parseInt(brimob) + parseInt(spn) + parseInt(labfor) + parseInt(yanma) + parseInt(rumkit) + parseInt(resta) + 
            parseInt(muba) + parseInt(b_asin) + parseInt(oki) + parseInt(oi) + parseInt(m_enim) + parseInt(prabu) + parseInt(lahat) + parseInt(p_alam) + 
            parseInt(oku) + parseInt(okut) + parseInt(linggau) + parseInt(mura) + parseInt(lawang) + parseInt(pali) + parseInt(muratara);
            $("#jumlah").val(jumlah);
        });
    });
</script>
</body>
</html>