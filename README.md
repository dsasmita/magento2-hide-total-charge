# Magento 2 Hide Total Charge Information

This Extension is used for hide information total charge "You will be charged for" information when applied multiple currency on store view

## Features:

### Frontend
- hide total charge info on checkout payment
- hide total charge info on order detail
- hide total charge info on order email notificaion

### Backend
- Set status enable/ disable function under menu Stores >> Configuration >> Sales - Sales Under tabs Checkout Totals Sort Order

## Introduction installation:

### Installation
- Download file
- Unzip the file
- Create a folder [root]/app/code/Dangs/TotalChargeHide
- Copy to folder

### Enable Extension

```
php bin/magento module:enable Dangs_TotalChargeHide
php bin/magento setup:upgrade
php bin/magento cache:clean
php bin/magento setup:static-content:deploy
```


## Screenshot
![ScreenShot](https://github.com/dsasmita/magento2-hide-total-charge/blob/master/screen-shot/configuration.png)

## Donation
If you find this extension help you,  feel free to donate
:)

[![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](http://bit.ly/2nFWFZI)
