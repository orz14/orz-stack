#!/bin/bash

if [ -x "$(command -v pnpm)" ]; then
    pnpm install && pnpm build
else
    npm install && npm run build
fi
