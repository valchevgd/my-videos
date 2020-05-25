<?php


namespace Core\Http\Request;


use Core\ViewEngine\ViewInterface;

abstract class Request implements RequestInterface
{
    protected array $params;
    protected ViewInterface $view;

    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function all(): array
    {
        return $this->params;
    }

    public function input(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    protected function returnBackWithErrors(string $view, array $errors) : void
    {
        $this->view->render($view, $errors);
    }

    abstract protected function validate(array $data): array ;

}
