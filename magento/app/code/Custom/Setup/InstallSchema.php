<?php
namespace Custom\PrivacyNotification\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable($setup->getTable('privacy_consent'))
            ->addColumn(
                'customer_id',
                Table::TYPE_INTEGER,
                null,
                ['nullable' => false, 'primary' => true]
            )
            ->addColumn(
                'accepted',
                Table::TYPE_BOOLEAN,
                null,
                ['nullable' => false, 'default' => false],
                'Accepted Terms'
            )
            ->setComment('Privacy Policy Consent');

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
