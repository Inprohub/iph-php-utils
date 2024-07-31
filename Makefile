.PHONY: proto

proto:
	@protoc --php_out=src \
	--grpc_out=src \
	--plugin=protoc-gen-grpc=/usr/bin/grpc_php_plugin \
	src/grpc/src/*.proto
