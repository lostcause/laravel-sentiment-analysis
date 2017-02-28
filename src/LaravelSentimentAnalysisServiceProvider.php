<?php

namespace Antoineaugusti\LaravelSentimentAnalysis;

use Illuminate\Support\ServiceProvider;

class LaravelSentimentAnalysisServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {  
        $this->app->singleton('sentimentanalysis', function () {
            return $this->app->make('Antoineaugusti\LaravelSentimentAnalysis\SentimentAnalysis');
        });        
    }
}
