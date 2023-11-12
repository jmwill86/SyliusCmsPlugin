<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Twig\Extension;

use BitBag\SyliusCmsPlugin\Twig\Runtime\RenderProductPagesRuntimeInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class RenderProductPagesExtension extends AbstractExtension
{
    public function __construct(private RenderProductPagesRuntimeInterface $productPagesRuntime)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('bitbag_cms_render_product_pages', [$this->productPagesRuntime, 'renderProductPages'], ['is_safe' => ['html']]),
        ];
    }
}
