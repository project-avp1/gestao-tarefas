<?php

namespace Phiki\Adapters\Laravel;

use Illuminate\Support\ServiceProvider;

/**
 * Fallback service provider to evitar erros quando a biblioteca original Phiki não está instalada.
 */
class PhikiServiceProvider extends ServiceProvider
{
    /**
     * Registra serviços. Mantido vazio por ser apenas um stub.
     */
    public function register(): void
    {
        // Nenhum binding necessário.
    }

    /**
     * Boot da aplicação. Mantido vazio para compatibilidade mínima.
     */
    public function boot(): void
    {
        // Sem lógica de boot, apenas previne erros de classe inexistente.
    }
}
