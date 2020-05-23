<?php


namespace Services;


class HomeService implements HomeServiceInterface
{
    const INDEX_PAGE_NAME = 'home/index';

    public function getViewName(): string
    {
        return self::INDEX_PAGE_NAME;
    }
}
