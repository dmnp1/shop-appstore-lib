<?php

namespace DreamCommerce\Model\Shop;

interface UserAddressInterface extends ShopDependentInterface
{
    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param UserInterface $user
     */
    public function setUser($user);
}