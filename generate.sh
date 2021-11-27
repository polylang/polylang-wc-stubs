#!/usr/bin/env bash

vendor/bin/generate-stubs \
    --force \
    --finder=finder.php \
    --functions \
    --interfaces \
    --traits \
    --classes \
    --out=polylang-wc-stubs.php
