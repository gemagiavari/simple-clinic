<?php

use yii\db\Migration;

/**
 * Class m240505_121623_init_rbac
 */
class m240505_121623_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Untuk role admin:
        //Manage all access (CRUD) pada `Pasien`.
        $auth = Yii::$app->authManager;
        $managePasien = $auth->createPermission('managePasien');
        $managePasien->description = 'Manage all pasien (full access)';
        $auth->add($managePasien);

        //Manage all access (CRUD) pada `Tindakan`.
        $auth = Yii::$app->authManager;
        $manageTindakan = $auth->createPermission('manageTindakan');
        $manageTindakan->description = 'Manage all tindakan (full access)';
        $auth->add($manageTindakan);

        //Manage all access (CRUD) pada `Transaksi Pendaftaran`.
        $auth = Yii::$app->authManager;
        $manageTransaksiPendaftaran = $auth->createPermission('manageTransaksiPendaftaran');
        $manageTransaksiPendaftaran->description = 'Manage all transaksi pendaftaran (full access)';
        $auth->add($manageTransaksiPendaftaran);

        //Manage all access (CRUD) pada `Penerimaan Uang Pendaftaran`.
        $auth = Yii::$app->authManager;
        $managePenerimaanUangPendaftaran = $auth->createPermission('managePenerimaanUangPendaftaran');
        $managePenerimaanUangPendaftaran->description = 'Manage all penerimaan uang pendaftaran (full access)';
        $auth->add($managePenerimaanUangPendaftaran);

        //Manage all access (CRUD) pada `Bank`.
        $auth = Yii::$app->authManager;
        $manageBank = $auth->createPermission('manageBank');
        $manageBank->description = 'Manage all bank (full access)';
        $auth->add($manageBank);

        //Manage all access (CRUD) pada `Obat`.
        $auth = Yii::$app->authManager;
        $manageObat = $auth->createPermission('manageObat');
        $manageObat->description = 'Manage all obat (full access)';
        $auth->add($manageObat);

        //Manage all access (CRUD) pada `Pegawai`.
        $auth = Yii::$app->authManager;
        $managePegawai = $auth->createPermission('managePegawai');
        $managePegawai->description = 'Manage all pegawai (full access)';
        $auth->add($managePegawai);

        //Manage all access (CRUD) pada `Transaksi Apotek`.
        $auth = Yii::$app->authManager;
        $manageTransaksiApotek = $auth->createPermission('manageTransaksiApotek');
        $manageTransaksiApotek->description = 'Manage all transaksi apotek (full access)';
        $auth->add($manageTransaksiApotek);

        //Manage all access (CRUD) pada `Penerimaan Uang Apotek`.
        $auth = Yii::$app->authManager;
        $managePenerimaanUangApotek = $auth->createPermission('managePenerimaanUangApotek');
        $managePenerimaanUangApotek->description = 'Manage all penerimaan uang apotek (full access)';
        $auth->add($managePenerimaanUangApotek);

        //Bikin role `admin`.
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $managePasien);
        $auth->addChild($admin, $manageTindakan);
        $auth->addChild($admin, $manageTransaksiPendaftaran);
        $auth->addChild($admin, $managePenerimaanUangPendaftaran);
        $auth->addChild($admin, $manageBank);
        $auth->addChild($admin, $manageObat);
        $auth->addChild($admin, $managePegawai);
        $auth->addChild($admin, $manageTransaksiApotek);
        $auth->addChild($admin, $managePenerimaanUangApotek);


        //Assign role `admin` ke table `user` dengan id=1.
        $auth->assign($admin, 1);


        //Untuk role pendaftaran:
        //1.Pasien.
        //Pasien actionIndex:
        $auth = Yii::$app->authManager;
        $indexPasien = $auth->createPermission('indexPasien');
        $indexPasien->description = 'Pasien actionIndex';
        $auth->add($indexPasien);

        //Pasien actionCreate:
        $auth = Yii::$app->authManager;
        $createPasien = $auth->createPermission('createPasien');
        $createPasien->description = 'Pasien actionCreate';
        $auth->add($createPasien);

        //Pasien actionView:
        $auth = Yii::$app->authManager;
        $viewPasien = $auth->createPermission('viewPasien');
        $viewPasien->description = 'Pasien actionView';
        $auth->add($viewPasien);

        //Pasien actionUpdate:
        $auth = Yii::$app->authManager;
        $updatePasien = $auth->createPermission('updatePasien');
        $updatePasien->description = 'Pasien actionUpdate';
        $auth->add($updatePasien);

        //2.Transaksi Pendaftaran.
        //Transaksi Pendaftaran actionIndex:
        $auth = Yii::$app->authManager;
        $indexTransaksiPendaftaran = $auth->createPermission('indexTransaksiPendaftaran');
        $indexTransaksiPendaftaran->description = 'Transaksi Pendaftaran actionIndex';
        $auth->add($indexTransaksiPendaftaran);

        //Transaksi Pendaftaran actionCreate:
        $auth = Yii::$app->authManager;
        $createTransaksiPendaftaran = $auth->createPermission('createTransaksiPendaftaran');
        $createTransaksiPendaftaran->description = 'Transaksi Pendaftaran actionCreate';
        $auth->add($createTransaksiPendaftaran);

        //Transaksi Pendaftaran actionView:
        $auth = Yii::$app->authManager;
        $viewTransaksiPendaftaran = $auth->createPermission('viewTransaksiPendaftaran');
        $viewTransaksiPendaftaran->description = 'Transaksi Pendaftaran actionView';
        $auth->add($viewTransaksiPendaftaran);

        //Transaksi Pendaftaran actionUpdate:
        $auth = Yii::$app->authManager;
        $updateTransaksiPendaftaran = $auth->createPermission('updateTransaksiPendaftaran');
        $updateTransaksiPendaftaran->description = 'Transaksi Pendaftaran actionUpdate';
        $auth->add($updateTransaksiPendaftaran);

        //3.Penerimaan Uang Pendaftaran.
        //Penerimaan Uang Pendaftaran actionIndex:
        $auth = Yii::$app->authManager;
        $indexPenerimaanUangPendaftaran = $auth->createPermission('indexPenerimaanUangPendaftaran');
        $indexPenerimaanUangPendaftaran->description = 'Penerimaan Uang Pendaftaran actionIndex';
        $auth->add($indexPenerimaanUangPendaftaran);

        //Penerimaan Uang Pendaftaran actionCreate:
        $auth = Yii::$app->authManager;
        $createPenerimaanUangPendaftaran = $auth->createPermission('createPenerimaanUangPendaftaran');
        $createPenerimaanUangPendaftaran->description = 'Penerimaan Uang Pendaftaran actionCreate';
        $auth->add($createPenerimaanUangPendaftaran);

        //Penerimaan Uang Pendaftaran actionView:
        $auth = Yii::$app->authManager;
        $viewPenerimaanUangPendaftaran = $auth->createPermission('viewPenerimaanUangPendaftaran');
        $viewPenerimaanUangPendaftaran->description = 'Penerimaan Uang Pendaftaran actionView';
        $auth->add($viewPenerimaanUangPendaftaran);

        //Penerimaan Uang Pendaftaran actionUpdate:
        $auth = Yii::$app->authManager;
        $updatePenerimaanUangPendaftaran = $auth->createPermission('updatePenerimaanUangPendaftaran');
        $updatePenerimaanUangPendaftaran->description = 'Penerimaan Uang Pendaftaran actionUpdate';
        $auth->add($updatePenerimaanUangPendaftaran);

        //Bikin role `pendaftaran`.
        $pendaftaran = $auth->createRole('pendaftaran');
        $auth->add($pendaftaran);
        $auth->addChild($pendaftaran, $indexPasien);
        $auth->addChild($pendaftaran, $createPasien);
        $auth->addChild($pendaftaran, $viewPasien);
        $auth->addChild($pendaftaran, $updatePasien);
        $auth->addChild($pendaftaran, $indexTransaksiPendaftaran);
        $auth->addChild($pendaftaran, $createTransaksiPendaftaran);
        $auth->addChild($pendaftaran, $viewTransaksiPendaftaran);
        $auth->addChild($pendaftaran, $updateTransaksiPendaftaran);
        $auth->addChild($pendaftaran, $indexPenerimaanUangPendaftaran);
        $auth->addChild($pendaftaran, $createPenerimaanUangPendaftaran);
        $auth->addChild($pendaftaran, $viewPenerimaanUangPendaftaran);
        $auth->addChild($pendaftaran, $updatePenerimaanUangPendaftaran);

        //Assign role `pendaftaran` ke table `user` dengan id=2.
        $auth->assign($pendaftaran, 2);

        //Untuk role apotek:
        //1.Obat.
        //Obat actionIndex:
        $auth = Yii::$app->authManager;
        $indexObat = $auth->createPermission('indexObat');
        $indexObat->description = 'Obat actionIndex';
        $auth->add($indexObat);

        //Obat actionCreate:
        $auth = Yii::$app->authManager;
        $createObat = $auth->createPermission('createObat');
        $createObat->description = 'Obat actionCreate';
        $auth->add($createObat);

        //Obat actionView:
        $auth = Yii::$app->authManager;
        $viewObat = $auth->createPermission('viewObat');
        $viewObat->description = 'Obat actionView';
        $auth->add($viewObat);

        //Obat actionUpdate:
        $auth = Yii::$app->authManager;
        $updateObat = $auth->createPermission('updateObat');
        $updateObat->description = 'Obat actionUpdate';
        $auth->add($updateObat);

        //2.Transaksi Apotek.
        //Transaksi Apotek actionIndex:
        $auth = Yii::$app->authManager;
        $indexTransaksiApotek = $auth->createPermission('indexTransaksiApotek');
        $indexTransaksiApotek->description = 'Transaksi Apotek actionIndex';
        $auth->add($indexTransaksiApotek);

        //Transaksi Apotek actionCreate:
        $auth = Yii::$app->authManager;
        $createTransaksiApotek = $auth->createPermission('createTransaksiApotek');
        $createTransaksiApotek->description = 'Transaksi Apotek actionCreate';
        $auth->add($createTransaksiApotek);

        //Transaksi Apotek actionView:
        $auth = Yii::$app->authManager;
        $viewTransaksiApotek = $auth->createPermission('viewTransaksiApotek');
        $viewTransaksiApotek->description = 'Transaksi Apotek actionView';
        $auth->add($viewTransaksiApotek);

        //Transaksi Apotek actionUpdate:
        $auth = Yii::$app->authManager;
        $updateTransaksiApotek = $auth->createPermission('updateTransaksiApotek');
        $updateTransaksiApotek->description = 'Transaksi Apotek actionUpdate';
        $auth->add($updateTransaksiApotek);

        //3.Penerimaan Uang Apotek.
        //Penerimaan Uang Apotek actionIndex:
        $auth = Yii::$app->authManager;
        $indexPenerimaanUangApotek = $auth->createPermission('indexPenerimaanUangApotek');
        $indexPenerimaanUangApotek->description = 'Penerimaan Uang Apotek actionIndex';
        $auth->add($indexPenerimaanUangApotek);

        //Penerimaan Uang Apotek actionCreate:
        $auth = Yii::$app->authManager;
        $createPenerimaanUangApotek = $auth->createPermission('createPenerimaanUangApotek');
        $createPenerimaanUangApotek->description = 'Penerimaan Uang Apotek actionCreate';
        $auth->add($createPenerimaanUangApotek);

        //Penerimaan Uang Apotek actionView:
        $auth = Yii::$app->authManager;
        $viewPenerimaanUangApotek = $auth->createPermission('viewPenerimaanUangApotek');
        $viewPenerimaanUangApotek->description = 'Penerimaan Uang Apotek actionView';
        $auth->add($viewPenerimaanUangApotek);

        //Penerimaan Uang Apotek actionUpdate:
        $auth = Yii::$app->authManager;
        $updatePenerimaanUangApotek = $auth->createPermission('updatePenerimaanUangApotek');
        $updatePenerimaanUangApotek->description = 'Penerimaan Uang Apotek actionUpdate';
        $auth->add($updatePenerimaanUangApotek);


        //Bikin role `apotek`.
        $apotek = $auth->createRole('apotek');
        $auth->add($apotek);
        $auth->addChild($apotek, $indexObat);
        $auth->addChild($apotek, $createObat);
        $auth->addChild($apotek, $viewObat);
        $auth->addChild($apotek, $updateObat);
        $auth->addChild($apotek, $indexTransaksiApotek);
        $auth->addChild($apotek, $createTransaksiApotek);
        $auth->addChild($apotek, $viewTransaksiApotek);
        $auth->addChild($apotek, $updateTransaksiApotek);
        $auth->addChild($apotek, $indexPenerimaanUangApotek);
        $auth->addChild($apotek, $createPenerimaanUangApotek);
        $auth->addChild($apotek, $viewPenerimaanUangApotek);
        $auth->addChild($apotek, $updatePenerimaanUangApotek);

        //Assign role `apotek` ke table `user` dengan id=3.
        $auth->assign($apotek, 3);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }
}
